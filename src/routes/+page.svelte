<script>
    import DownloadIcon from "../components/icons/DownloadIcon.svelte";
    import {
        summary,
        skills,
        jobs,
        education,
        certifications,
    } from "$lib/ResumeData.js";
</script>

<div class="container">
    <a
        class="text-decoration-none float-end"
        href="/Bedir Aygun Resume.pdf"
        title="Download Resume PDF"
        download="Bedir Aygun Resume.pdf"><DownloadIcon height="1" /></a
    >
    <h1>BEDIR AYGUN</h1>
    <h2>SOFTWARE ENGINEER</h2>

    <div>
        <p>
            {summary}
        </p>
    </div>

    <div class="my-3">
        <h2>TECHNICAL PROFICIENCIES</h2>
        {#each skills as skill}
            <div>
                <h5 style="display: inline;">{skill.category}:</h5>
                <span>{skill.items.join(", ")}</span>
            </div>
        {/each}
    </div>

    <div class="my-3">
        <h2>WORK EXPERIENCE</h2>
        {#each jobs as job}
            <div>
                <h5>{job.title}</h5>
                <div class="justify-space">
                    <span>{job.company}</span>
                    <span>{job.period}</span>
                </div>
                <p>{job.description}</p>
                <ul>
                    {#each job.tasks as task}
                        <li>{task}</li>
                    {/each}
                </ul>
            </div>
        {/each}
    </div>

    <div class="my-3">
        <h2>EDUCATION</h2>
        {#each education as edu}
            <div>
                <h5>{edu.degree}</h5>
                <div class="justify-space">
                    <span>{edu.institution}</span>
                    <span>{edu.period}</span>
                </div>
            </div>
        {/each}
    </div>

    <div>
        <h2>CERTIFICATIONS</h2>
        {#each certifications as cert}
            <div>
                <div class="justify-space">
                    <h5>{cert.name}</h5>
                    <span>{cert.date}</span>
                </div>
            </div>
        {/each}
    </div>
</div>